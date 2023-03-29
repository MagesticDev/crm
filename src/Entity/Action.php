<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="actions")
 */
class Action
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
    protected $description;
    /**
     * @ORM\Column(type="string")
     */
    protected $type;
    /**
     * @ORM\Column(type="string")
     */
    protected $status;
    /**
     * @ORM\Column(type="string")
     */
    protected $priority;
    /**
     * @ORM\Column(type="string")
     */
    protected $due_date;
    /**
     * @ORM\Column(type="string")
     */
    protected $created_at;
    /**
     * @ORM\Column(type="string")
     */
    protected $updated_at;
    /**
     * @ORM\Column(type="string")
     */
    protected $deleted_at;
    /**
     * @ORM\ManyToOne(targetEntity="Entity\Project", inversedBy="actions")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    protected $project;
    /**
     * @ORM\ManyToOne(targetEntity="Entity\User", inversedBy="actions")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    /**
     * @ORM\ManyToOne(targetEntity="Entity\Task", inversedBy="actions")
     * @ORM\JoinColumn(name="task_id", referencedColumnName="id")
     */
    protected $task;
    /**
     * @ORM\ManyToOne(targetEntity="Entity\Comment", inversedBy="actions")
     * @ORM\JoinColumn(name="comment_id", referencedColumnName="id")
     */
    protected $comment;
    /**
     * @ORM\ManyToOne(targetEntity="Entity\Attachment", inversedBy="actions")
     * @ORM\JoinColumn(name="attachment_id", referencedColumnName="id")
     */
    protected $attachment;
    /**
     * @ORM\ManyToOne(targetEntity="Entity\ProjectUser", inversedBy="actions")
     * @ORM\JoinColumn(name="project_user_id", referencedColumnName="id")
     */
    protected $project_user;
    /**
     * @ORM\ManyToOne(targetEntity="Entity\ProjectTask", inversedBy="actions")
     * @ORM\JoinColumn(name="project_task_id", referencedColumnName="id")
     */
    protected $project_task;
    /**
     * @ORM\ManyToOne(targetEntity="Entity\ProjectComment", inversedBy="actions")
     * @ORM\JoinColumn(name="project_comment_id", referencedColumnName="id")
     */
    
}