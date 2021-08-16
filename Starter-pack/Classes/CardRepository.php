<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
    private $databaseManager;

    // This class needs a database connection to function
    public function __construct(DatabaseManager $databaseManager)
    {
        $this->databaseManager = $databaseManager;
    }

    public function create(): bool
    {
        if (isset($_POST['submit']) && !empty($_POST['name']) && !empty($_POST['color']))
        {
            $addedPokemonName = $_POST['name'];
            $addedPokemonColor = $_POST['color'];
            $sql = "INSERT INTO cards (name, color) VALUES ('$addedPokemonName', '$addedPokemonColor' )";
            $this->databaseManager->connection->query($sql);
            return true;
        }
        else {
            return false;
        }
    }

    // Get one
    public function find(): array
    {

    }

    // Get all
    public function get()
    {
        // done: replace dummy data by real one
        $sql = 'SELECT * FROM cards';
        $result = $this->databaseManager->connection->query($sql);

        return $result;

        // We get the database connection first, so we can apply our queries with it
        // return $this->databaseManager->connection-> (runYourQueryHere)
    }

    public function update(): void
    {

    }

    public function delete(): void
    {

    }

}