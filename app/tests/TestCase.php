<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;

class TestCase extends Illuminate\Foundation\Testing\TestCase {

	/**
	 * Creates the application.
	 *
	 * @return \Symfony\Component\HttpKernel\HttpKernelInterface
	 */
	public function createApplication()
	{
		$unitTesting = true;

		$testEnvironment = 'testing';

		return require __DIR__.'/../../bootstrap/start.php';
	}


    /**
     * Prepares the database for the tests (ideally an in-memory SQLite DB)
     */
    protected function prepareForTests()
    {
        // migrate the DB and seed it
        Artisan::call('migrate');
        Artisan::call('db:seed');

        // don't send email
        Mail::pretend(true);
    }

}
