<?php
namespace Phpinheiros\Security\AuthDomain\Entity;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Phpinheiros\Security\AuthDomain\Entity\IPapelEntity;
use Phpinheiros\Infrastructure\ORM\IEntity;

/**
 * Entidade de Usuario
 * @author Vinicius de Sa <viniciusss@me.com>
 */
interface IUsuarioEntity extends IEntity, AdvancedUserInterface, \Serializable
{
    /**
     * return IPapelEntity[]
     */
    public function getFuncoes();
    
    /**
     * Retorna o nome do usuario
     * return string
     */
    public function getNome();
    
    /**
     * @param string $username
     * @return \Phpinheiros\Security\AuthDomain\Usuario\IUsuarioEntity
     */
    public function setUsername($username);
    
    /**
     * @param string $password
     * @return \Phpinheiros\Security\AuthDomain\Usuario\IUsuarioEntity
     */
    public function setPassword($password);
    
    /**
     * Define o nome
     * @param string $nome
     */
    public function setNome($nome);
    
    /**
     * @param string $status
     * @return \Phpinheiros\Security\AuthDomain\Usuario\IUsuarioEntity
     */
    public function setStatus($status);
    
    public function getStatus();
}