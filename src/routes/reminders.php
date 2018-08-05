<?php 
/*
|--------------------------------------------------------------------------
| Reminders
|--------------------------------------------------------------------------
|
| When the cache miss, we can remind the data source by registering the 
| reminders callback below.
*/
Remember::remind('hello', function(){
    return 'world';
});