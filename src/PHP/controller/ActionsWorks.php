<?php
    require_once "../preController/index.php";
    require_once "../helpers/index.php";

    $link = "localhost";
    $dbName = "tcc";
    $usr = "root";
    $pass = "";
    
    $controller = new WorksController;
    
    class ActionsWorks {

        //lê as entradas de trabalhos no BD
        public function read() {
            global $link, $dbName, $usr, $pass, $controller;

            //conecção com o BD;
            try{

                //tenta se conectar com o banco de dados
                $con = connection($link, $dbName, $usr, $pass);
                $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e) {

                //em caso de erro exibe a window.allert()
                echo `window.allert('Erro ao conectar com o banco de dados! <br> {$e->getMessage()}')`;
            }

            if($controller->getId() === 0){

                //prepara uma string para ser executada posteriormente com o prepare;
                //:_mark - é uma forma de se proteger, para ninguem colocar um drop database e acabar com o banco
                $statement = $con -> prepare("SELECT * from tb_work;");
                try{
                    //tenta executar a string que estava sendo preparada, ou seja, envia para o DB os dados.
                    $statement -> execute();
    
                    return $statement->fetchAll(PDO::FETCH_ASSOC);
                }catch(Exception $e){
                    //em caso de erro 
                    echo `window.allert('Erro ao conectar com o banco de dados! <br> {$e->getMessage()}')`;
                }

            }else if($controller->getId() > 0){

                //prepara uma string para ser executada posteriormente com o prepare;
                //:_mark - é uma forma de se proteger, para ninguem colocar um drop database e acabar com o banco
                $statement = $con -> prepare("SELECT * FROM tb_work; WHERE id = :_id");
                $statement -> bindValue(":_id", $controller->getId(), PDO::PARAM_INT);
                try{
                    //tenta executar a string que estava sendo preparada, ou seja, envia para o DB os dados.
                    $statement -> execute();
    
                    return $statement->fetchAll(PDO::FETCH_ASSOC);
                }catch(Exception $e){
                    //em caso de erro 
                    echo `window.allert('Erro ao conectar com o banco de dados! <br> {$e->getMessage()}')`;
                }
            }
            return [];
        }

        //Cria entradas de trabalhos no BD
        public function create() :array {
            
            global $link, $dbName, $usr, $pass, $controller;

            try{

                //tenta se conectar com o banco de dados
                $con = connection($link, $dbName, $usr, $pass);
                $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e) {

                //em caso de erro exibe a window.allert()
                echo `window.allert('Erro ao conectar com o banco de dados! <br> {$e->getMessage()}')`;
            }

            //prepara uma string para ser executada posteriormente com o prepare;
            //:_mark - é uma forma de se proteger, para ninguem colocar um drop database e acabar com o banco
            $statement = $con -> prepare("INSERT INTO tb_work VALUES (NULL, :_name, :_type, :_year, :_description)");
            
            //substitui o :_mark por um valor, e expecifica o tipo do valor (explicitado por segurança);
            $statement -> bindValue(":_name", $controller->getName(), PDO::PARAM_STR);
            $statement -> bindValue(":_type", $controller->getType(), PDO::PARAM_STR);
            $statement -> bindValue(":_year", $controller->getYear(), PDO::PARAM_STR);
            $statement -> bindValue(":_description", $controller->getDescription(), PDO::PARAM_STR);
            

            try{
                //tenta executar a string que estava sendo preparada, ou seja, envia para o DB os dados.
                if($statement -> execute()){
                    //pega o ID do usuário que foi enviado para o DB;
                    $controller->setId($con -> lastInsertId());
                    //exibe o usuário inserido na DB;
                    return $this -> read();
                }
            }catch(Exception $e){
                //em caso de erro 
                echo `window.allert('Erro ao conectar com o banco de dados! <br> {$e->getMessage()}')`;
            }
            return [];
            
        }

        //Atualiza entradas de trabalhos no BD
        public function update() {
            global $link, $dbName, $usr, $pass, $controller;

            try{
                //tenta se conectar com o banco de dados
                $con = connection($link, $dbName, $usr, $pass);
                $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e) {

                //em caso de erro exibe a window.allert()
                echo `window.allert('Erro ao conectar com o banco de dados! <br> {$e->getMessage()}')`;
            }

            //prepara uma string para ser executada posteriormente com o prepare;
            //:_mark - é uma forma de se proteger, para ninguem colocar um drop database e acabar com o banco
            $statement = $con -> prepare("UPDATE tb_work SET name=:_name, type=:_type, year=:_year, description=:_description WHERE id = :_id");
            
            //substitui o :_mark por um valor, e expecifica o tipo do valor (explicitado por segurança);
            $statement -> bindValue(":_id", $controller->getId(), PDO::PARAM_INT);
            $statement -> bindValue(":_name", $controller->getName(), PDO::PARAM_STR);
            $statement -> bindValue(":_type", $controller->getType(), PDO::PARAM_STR);
            $statement -> bindValue(":_year", $controller->getYear(), PDO::PARAM_STR);
            $statement -> bindValue(":_description", $controller->getDescription(), PDO::PARAM_STR);
            

            try{
                //tenta executar a string que estava sendo preparada, ou seja, envia para o DB os dados.
                if($statement -> execute()){
                    //exibe o usuário inserido na DB;
                    return $this -> read();
                }else{
                    //em caso de erro 
                    echo `window.allert('Erro ao conectar com o banco de dados! <br> {$e->getMessage()}')`;
                }
            }catch(Exception $e){
                //em caso de erro 
                echo `window.allert('Erro ao conectar com o banco de dados! <br> {$e->getMessage()}')`;
            }
            return [];
        }

        //Deleta entradas de trabalhos no BD
        public function delete() {
            global $link, $dbName, $usr, $pass, $controller;

            try{
                //tenta se conectar com o banco de dados
                $con = connection($link, $dbName, $usr, $pass);
                $con -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e) {

                //em caso de erro exibe a window.allert()
                echo `window.allert('Erro ao conectar com o banco de dados! <br> {$e->getMessage()}')`;
            }

            //pega o ID do usuário que será deletado no DB;
            $job = $this -> read();

            //prepara uma string para ser executada posteriormente com o prepare;
            //:_mark - é uma forma de se proteger, para ninguem colocar um drop database e acabar com o banco
            $statement = $con -> prepare("DELETE FROM tb_work WHERE id = :_id");
            
            //substitui o :_mark por um valor, e expecifica o tipo do valor (explicitado por segurança);
            $statement -> bindValue(":_id", $controller->getId(), PDO::PARAM_INT);

            try{
                //tenta executar a string que estava sendo preparada, ou seja, envia para o DB os dados.
                $statement -> execute();
                //exibe o usuário inserido na DB;
                return $job;

            }catch(Exception $e){
                //em caso de erro 
                echo `window.allert('Erro ao conectar com o banco de dados! <br> {$e->getMessage()}')`;
            }
            return [];
        }
    }