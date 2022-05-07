## Food

Simply add to your spork app through composer!

```
composer require spork/food
```

Publish your assets

```
php artisan vendor:publish --provider=Spork\\Food\\FoodServiceProvider
```

You'll need to run `artisan migrate` to ensure your database gets the new repeating events schema

Lastly, register the Service Provider in your Spork App's `config/app.php` file. That will automatically add the Food entry to the menu

#### Why can't I import data?
Well... Technically providing a way to index the recipies breaks the Terms and Conditions for the Hello Fresh website. While I don't believe this would fall under the intended use for that clause, I'd rather not risk it.