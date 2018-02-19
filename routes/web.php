<?php

Route::get('/', function () { return view('layouts.welcome'); });
Route::get('/docs/terms', function () { return view('docs.terms'); });
//kontroler pokreće metodu koja vraća view u kojem je forma za registraciju poslodavca
Route::get('/employer/register', 'EmployerController@registerCreate');
//kontroler pokreće metodu koja validira unesene podatke te kreira relacije u bazi podataka
Route::post('/employer/register', 'EmployerController@registerStore');

Route::get('/employee/register', 'EmployeeController@registerCreate');
Route::post('/employee/register', 'EmployeeController@registerStore');
//metoda login create vraća pogled u kojem se nalazi forma za prijavu u u sustav
Route::get('/employer/login', 'EmployerController@loginCreate');
//metoda loginStore provjerava unesene podatke, u slučaju pogrešnih podataka ispisuje
//poruku o grešci dok u slučaju ispravnih podataka preusmerava na početnu stranicu
Route::post('/employer/login', 'EmployerController@loginStore');

Route::get('/employee/login', 'EmployeeController@loginCreate');
Route::post('/employee/login', 'EmployeeController@loginStore');

//odjava iz sustava
Route::get('/employer/logout', 'EmployerController@logout');
Route::get('/employee/logout', 'EmployeeController@logout');

//metoda koja dohvaća naslovnu stranicu u kojem se nalazi popis svih trenutno dostupnih poslova
Route::get('/employer/index', 'EmployerController@index');
Route::get('/employee/index', 'EmployeeController@index');
//dohvat svih poslova koji zahtijevaju znanje određenog prirodnog jezika
Route::get('/employer/languages/{language}', 'LanguageController@index');
//dohvat svih poslova koji zahtijevaju znanje određenih vještina
Route::get('/employer/skills/{skill}', 'SkillController@index');
//dohvat svih poslova koji su aktivni u odabranom gradu
Route::get('/employer/towns/{town}', 'TownController@index');

Route::get('/employee/languages/{language}', 'LanguageController@index');
Route::get('/employee/skills/{skill}', 'SkillController@index');
Route::get('/employee/towns/{town}', 'TownController@index');

Route::get('/employer/employers', 'EmployerController@employers');
Route::get('/employer/employers/{employer}', 'EmployerController@employer');
Route::get('/employer/employees', 'EmployerController@employees');
Route::get('/employer/employees/{employee}', 'EmployerController@employee');
//uređivanje podataka o korisniku
Route::get('/employer/employers/edit/{employer}', 'EmployerController@edit');
Route::get('/employer/employers/delete/{employer}', 'EmployerController@delete');

Route::get('/employee/employers', 'EmployeeController@employers');
Route::get('/employee/employers/{employer}', 'EmployeeController@employer');
Route::get('/employee/employees', 'EmployeeController@employees');
Route::get('/employee/employees/{employee}', 'EmployeeController@employee');
Route::get('/employee/employees/edit/{employee}', 'EmployeeController@edit');
Route::get('/employee/employees/delete/{employee}', 'EmployeeController@delete');

Route::post('/employee/mail', 'MailController@employeeSend');
//listanje svih poslova koji se nalaze u istom gradu kao i employee
Route::get('/employee/match', 'EmployeeController@match');
//kontroler za baratanje recenzijama korisnika
Route::post('/employee/employers/{employer}/reviews', 'ReviewController@store');
Route::post('/employer/employees/{employee}/reviews', 'ReviewController@store');
Route::post('/employer/employees/{employee}/reviews', 'ReviewController@store');
//vraćanje pogleda koji sadrži obrazac za kreiranje novog posla
Route::get('/jobs/create', 'JobController@create');
//validacija podataka o novom unesenom poslu te njegovo spremanje u bazu podataka
Route::post('/jobs/create', 'JobController@store');
//dohvat pojedinog posla, uređivanje podataka o njemu i brisanje ukoliko je
//trenutni korisnik ujedno i tvrtka koja je objavila posao
Route::get('/jobs/{job}', 'JobController@show');
Route::get('/jobs/edit/{job}', 'JobController@edit');
Route::get('/jobs/delete/{job}', 'JobController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
