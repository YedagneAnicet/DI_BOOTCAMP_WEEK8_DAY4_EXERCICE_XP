< ? php $host="localhost" ; $port="5432" ; $dbname="public" ; $user="postgres" ; $password="postgres" ;
    $db=pg_connect( "host=$host port=$port dbname=$dbname user=$user password=$password" ); if(! $db) {
    echo "Error : you can accss the database\n" ; } else { echo "Opened database successfully\n" ; } ?>