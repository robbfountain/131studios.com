<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Spatie\Permission\Models\Permission;
use Tests\TestCase;

class AdminPanelTest extends TestCase
{
    use DatabaseMigrations;

    public function setUp()
    {
        parent::setUp();

        Permission::create(['name' => 'Access Admin Panel']);
    }

    /** @test */
    public function a_user_without_permission_cannot_access_the_admin_file_manager()
    {
        $this->withExceptionHandling();
        $this->signIn();

        $this->get('admin/elfinder')->assertStatus(403);
    }

    /** @test */
    public function a_user_without_permission_cannot_access_the_admin_contact_manager()
    {
        $this->withExceptionHandling();
        $this->signIn();

        $this->get('admin/contact')->assertStatus(403);
    }

    /** @test */
    public function a_user_without_permission_cannot_access_the_admin_user_and_permission_manager()
    {
        $this->withExceptionHandling();
        $this->signIn();

        $this->get('admin/user')->assertStatus(403);
        $this->get('admin/role')->assertStatus(403);
        $this->get('admin/permission')->assertStatus(403);
    }

    /** @test */
    public function a_user_without_permission_cannot_access_the_admin_project_manager()
    {
        $this->withExceptionHandling();
        $this->signIn();

        $this->get('admin/project')->assertStatus(403);
    }

    /** @test */
    public function a_user_without_permission_cannot_access_the_admin_dashboard()
    {
        $this->withExceptionHandling();
        $this->signIn();

        $this->get('/admin/dashboard')->assertStatus(403);
    }

    /** @test */
    public function a_user_without_permission_cannot_access_the_admin_news_manager()
    {
        $this->withExceptionHandling();
        $this->signIn();

        $this->get('admin/article')->assertStatus(403);
        $this->get('admin/category')->assertStatus(403);
        $this->get('admin/tag')->assertStatus(403);
    }
}
