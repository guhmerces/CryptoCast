
# CryptoCast
A personal project that is a MVP with the intention to group the best podcasts about cryptocurrencies.

Esse projeto pessoal se trata de um podcast sobre criptomoedas. Tem o objetivo de reunir os melhores podcasts sobre o assunto, onde o usuário pode criar e gerenciar seu próprio podcast, publicando-o, cadastrando episódios, além de realizar inscrições em outros podcasts.

Clone this repository and install the dependencies.

    $ git clone https://github.com/guhmerces/CryptoCast.git
    $ composer install

Don't forget to configure your .env file.

Migrate.

    $ php artisan migrate

Populating the database.

    $ php artisan db:seed

Create simlink for storage's public disk.

    $ php artisan storage:link

Serve the application.

    $ php artisan serve
