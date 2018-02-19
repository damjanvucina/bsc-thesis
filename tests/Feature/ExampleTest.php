<?php

namespace Tests\Feature;

use App\Employer;
use Illuminate\Auth\Authenticatable;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testHomepageFormat()
{
    $response = $this->get('/');
    $response->assertResponseOk();
}

    public function testHomepage()
    {
        $this->get('/')->assertResponseStatus(200);
    }

    //return je 500 zbog zabranjenog pristupa
    public function testHomepage2()
    {
        $this->get('/employer/index')->assertResponseStatus(500);
    }

    public function testLoginPage()
    {
        $this->get('/employee/login')->assertResponseStatus(200);
    }

    public function testRegisterPage()
    {
        $this->get('/employer/register')->assertResponseStatus(200);
    }

    public function testLinkingLogin()
    {
        $this->visit('/')
            ->click('Prijava honorarca')
            ->seePageIs('/employee/login');
    }

    public function testLinkingLogin2()
    {
        $this->visit('/')
            ->click('Prijava poslodavca')
            ->seePageIs('/employer/login');
    }



    public function testLinkingRegister()
    {
        $this->visit('/')
            ->click('Registracija honorarca')
            ->seePageIs('/employee/register');
    }

    public function testEmployerLogin()
    {
        $this->visit('/employer/login')
            ->type('infinum@example.com', 'email')
            ->type('password', 'password')
            ->press('Prijavi me')
            ->seePageIs('/employer/index');
    }

    public function testEmployeeLogin()
    {
        $this->visit('/employee/login')
            ->type('lijenko@example.com', 'email')
            ->type('password', 'password')
            ->press('Prijavi me')
            ->seePageIs('/employee/index');
    }

//    public function testNewEmployeeRegistration()
//    {
//        $this->visit('/employee/register')
//            ->type('Zaposlenko', 'name')
//            ->type('Zaposlenikić', 'surname')
//            ->type(22, 'age')
//            ->type('Split', 'town')
//            ->type('webAplikacije', 'jobtype')
//            ->type('dnevno', 'experience')
//            ->type('FER', 'school')
//            ->type('Ja sam testna osoba.', 'about')
//            ->type(1234, 'phone')
//            ->type('zaposlenko@example.com', 'email')
//            ->type('password', 'password')
//            ->type('password', 'password_confirmation')
//            ->press('Registriraj me')
//            ->seePageIs('/employee/index');
//    }

//    public function testNewEmployerRegistration()
//    {
//        $this->visit('/employer/register')
//            ->type('Testna Tvrka', 'name')
//            ->type('Split', 'town')
//            ->type('WebAplikacije', 'jobtype')
//            ->type(30, 'numemployees')
//            ->type('5', 'numjobs')
//            ->type('Mi smo testna tvrtka.', 'about')
//            ->type('testnatvrtka@example.com', 'email')
//            ->type('password', 'password')
//            ->type('password', 'password_confirmation')
//            ->press('Registriraj me')
//            ->seePageIs('/employer/register');
//    }

}
