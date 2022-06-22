# izishop

izishop is a simple e-commerce project based on Symfony. The development is not finished yet. The main resources used in izishop are as follows:
- [LexikJWTAuthenticationBundle](https://github.com/lexik/LexikJWTAuthenticationBundle)
- [API Platform](https://github.com/api-platform/api-platform)

## Installation

### Docker (optional)
You can run the project on Docker with Nginx, PHP, MySQL.

After installing [Docker](https://www.docker.com/products/docker-desktop/), run the following code on terminal in your project's directory.

```bash
docker compose up
```

Use the [Composer](https://getcomposer.org/download/) to install required resources.

```bash
composer update
```

## Usage
After running the server, you can go to [http://localhost/api](http://localhost/api) address and access the API Platform page of the application.

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.