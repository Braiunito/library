<?php


namespace App\Controller;

use App\Entity\Event;
use GuzzleHttp\Client;
use App\Security\Roles;
use App\Entity\Provider;
use App\Constant\Globals;
use App\Service\Serializer;
use Psr\Log\LoggerInterface;
use App\DBAL\Type\StatusType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;

class AbstractAppController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private TranslatorInterface $translator;
    private Security $security;
    protected $serializer;
    public $httpclient;
    public $logger;

    /**
     * AppController constructor.
     *
     * @param EntityManagerInterface $entityManager
     * @param TranslatorInterface $translator
     * @param SessionService $sessionService
     * @param Security $security
     */
    public function __construct(
        EntityManagerInterface $entityManager,
        Security $security,
        LoggerInterface $logger,
        TranslatorInterface $translator
    ) {
        $this->serializer = (new Serializer())->serializer;
        $this->entityManager = $entityManager;
        $this->translator = $translator;
        $this->security = $security;
        $this->logger = $logger;
        $this->httpclient = new Client();
    }

    protected function getAllOperations($orderBy, $filterBy = null, $search = null): array
    {
        // The correct path;
        /* $providerId = $this->getUser()->getProviders()[0]->getId();
        $this->getSessionService()->setNavigatingProviderId($providerId);
        $provider = $this->getNavigatingProvider(); */

        // This will get us all operations, but this is a provitional logic.
        // ToDo: This must work with a $provider and their respective ediData per client.
        $classes = Globals::STATUS_TYPES;
        
        if ($orderBy['fileType'] === 'DESC')
            krsort($classes);
        else if ($orderBy['fileType'] === 'ASC')
            ksort($classes);
        
        $operations = $this->operationService->findAllUploadedOperations($orderBy, $filterBy, $search);

        return $operations;
    }

    protected function getAllEvents($orderBy, $filterBy = null, $search = null): array
    {
        // The correct path;
        /* $providerId = $this->getUser()->getProviders()[0]->getId();
        $this->getSessionService()->setNavigatingProviderId($providerId);
        $provider = $this->getNavigatingProvider(); */

        // This will get us all operations, but this is a provitional logic.
        // ToDo: This must work with a $provider and their respective ediData per client.
        $classes = Globals::STATUS_TYPES;
        
        if ($orderBy['fileType'] === 'DESC')
            krsort($classes);
        else if ($orderBy['fileType'] === 'ASC')
            ksort($classes);
        
        $events = $this->operationService->findAllUploadedEvents($orderBy, $filterBy, $search);

        return $events;
    }

    protected function sortGivenEvents(array $events) {
        $result = null;

        foreach ($events as $key => $value) {
            if (!isset($result[$value->getStatus()])) {
                $result[$value->getStatus()] = array();
            }
            array_push($result[$value->getStatus()], $value);
        }

        return $result;
    }

    /**
     * @return EntityManagerInterface
     */
    protected function getEntityManager(): EntityManagerInterface
    {
        return $this->entityManager;
    }

    /**
     * @param string $id
     * @param array $parameters
     * @param string|null $domain
     * @param string|null $locale
     *
     * @return string
     */
    protected function trans(string $id, array $parameters = [], string $domain = null, string $locale = null): string
    {
        return $this->translator->trans($id, $parameters, $domain, $locale);
    }
}
