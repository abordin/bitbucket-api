<?php

namespace Bitbucket\Tests\API\Repositories;

use Bitbucket\Tests\API as Tests;
use Bitbucket\API;

class UsersTest extends Tests\TestCase
{
    /**
     * @var API\Users
     */
    private $users;

    public function setUp()
    {
        $this->users = new API\Users();
        $this->users->setCredentials(
            new API\Authentication\Basic('dummy', 'password')
        );
    }

    public function testGetAccountInstance()
    {
        $this->assertInstanceOf('\Bitbucket\API\Users\Account', $this->users->account());
    }

    public function testGetEmailsInstance()
    {
        $this->assertInstanceOf('\Bitbucket\API\Users\Emails', $this->users->emails());
    }

    public function testGetInvitationsInstance()
    {
        $this->assertInstanceOf('\Bitbucket\API\Users\Invitations', $this->users->invitations());
    }

    public function testGetOAuthInstance()
    {
        $this->assertInstanceOf('\Bitbucket\API\Users\OAuth', $this->users->oauth());
    }

    public function testGetPrivilegesInstance()
    {
        $this->assertInstanceOf('\Bitbucket\API\Users\Privileges', $this->users->privileges());
    }

    public function testGetSshKeysInstance()
    {
        $this->assertInstanceOf('\Bitbucket\API\Users\SshKeys', $this->users->sshKeys());
    }
}