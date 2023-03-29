<?php
namespace Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="action_type")
 */
class ActionType
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
    protected $icon;
    /**
     * @ORM\Column(type="string")
     */
    protected $color;
    /**
     * @ORM\Column(type="string")
     */
    protected $class;
    /**
     * @ORM\Column(type="string")
     */
    protected $method;
    /**
     * @ORM\Column(type="string")
     */
    protected $route;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_params;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_options;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_params;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_options;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_attributes;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_fragment;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_host;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_scheme;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_port;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_protocol;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_version;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_secure;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_http_port;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_https_port;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_base_url;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_relative_path;
    /**
     * @ORM\Column(type="string")
     */
    protected $route_extra_path_info;
}