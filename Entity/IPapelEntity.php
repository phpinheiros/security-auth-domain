<?php
namespace Phpinheiros\Security\AuthDomain\Entity;

echo __DIR__;
exit;
use Symfony\Component\Security\Core\Role\RoleInterface;
use Phpinheiros\Infrastructure\ORM\IEntity;

interface IPapelEntity extends RoleInterface, IEntity
{
    /**
     * @return the $id
     */
    public function getId();

	/**
     * @return the $nome
     */
    public function getNome();

	/**
     * 
     * @param string $nome
     * @return \Phpinheiros\Security\AuthDomain\Papel\IPapelEntity
     */
    public function setNome($nome);

	/**
     * @param string $role
     * @return \Phpinheiros\Security\AuthDomain\Papel\IPapelEntity
     */
    public function setRole($role);
    
    /**
     * Retorna o nome padrao para o papel
     * @see \Symfony\Component\Security\Core\Role\RoleInterface::getRole()
     */
	public function getRole();
}
