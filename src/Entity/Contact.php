<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="contact")
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * @ORM\Column(type="string")
     */
    protected $email;
    /**
     * @ORM\Column(type="string")
     */
    protected $subject;
    /**
     * @ORM\Column(type="string")
     */
    protected $message;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $read;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $deleted;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $archived;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $spam;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $important;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $starred;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $sent;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $draft;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $trash;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $inbox;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $outbox;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $sentbox;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $draftbox;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $trashbox;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $inboxbox;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $outboxbox;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $sentboxbox;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $draftboxbox;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $trashboxbox;
    /**
     * @ORM\Column(type="boolean")
     */
    protected $inboxboxbox;
    
}