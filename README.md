#using tinker
1. Create a new facotry using "php artisan make:factory ThreadFacotry --model=Thread"
2. Create factory method similar to UserFactory, according to use
3. php artisan tinker
4. create threads - >>> factory('App\Thread',50)->create();
5. create replies - >>> $threads->each(function($thread){ factory('App\Reply',10)->create(['thread_id'=>$thread->id]);});


#PHPUnit
- composer require --dev phpunit/phpunit ^6.5
- composer global require phpunit/phpunit
- composer global require phpunit/dbunit


