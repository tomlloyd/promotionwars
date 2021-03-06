<p align="center"><img src="http://geocities.ws/promwars/banner.jpg"></p>

[ ![Codeship Status for mikebywater/promotionwars](https://app.codeship.com/projects/cb6bd0c0-6046-0135-6b30-4614bcb67ade/status?branch=master)](https://app.codeship.com/projects/239406) 
[![Maintainability](https://api.codeclimate.com/v1/badges/6e922f4bd46f0db54cb4/maintainability)](https://codeclimate.com/github/mikebywater/promotionwars/maintainability)


## About Promotion Wars Online

Promotion Wars was an excellent wrestling booking simulator written by Adam Jennings in 2000. It is a game that will elicit feelings of nostalgia for many wrestling fans. Promotion Wars Online is intended to be a homage to a wonderful game and a chance to have a bit of fun and hopefully learn something new as we go. 

## Contributing

Thank you for considering contributing to the project, for now please raise some issues for any features that you would like to request, the initial scope will be to create something close to the original Promotion Wars with a multiplayer element, all ideas are welcome.

## Development

```
cp .env.example .env
docker-compose up -d
docker-compose exec promotionwars-app php artisan key:generate
docker-compose exec promotionwars-app composer install
docker-compose exec promotionwars-app php artisan migrate
```

## Testing

```
php artisan test
```

## Issues

```
docker-compose exec promotionwars-app php artisan config:cache
```

## License

The Promotion Wars Online Project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
