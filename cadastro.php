
<?php

    
    class cadastro
    {

        private $nome;
        private $email;
        private $dtnascimento;
        private $cidade;
        private $senha;

        public function __construct(){}

        public function create($_nome, $_email, $_dtnascimento,$_cidade,$_senha,)
        {
            $this->nome = $_nome;
            $this->email = $_email;
            $this->dtnascimento = $_dtnascimento;
            $this->cidade = $_cidade;
            $this->senha = $_senha;
        }

        public function getnome()
        {
            return $this->nome;
        }

        public function setnome($_nome)
        {
            $this->nome = $_nome;
        }

        public function getemail()
        {
            return $this->email;
        }

        public function setemail($_email)
        {
            $this->email = $_email;
        }
         
        public function getdtnascimento()
        {
            return $this->dtnascimento;
        }

        public function setdtnascimento($_dtnascimento)
        {
            $this->dtnascimento = $_dtnascimento;
        }

        public function getcidade()
        {
            return $this->cidade;
        }

        public function setcidade($_cidade)
        {
            $this->cidade = $_cidade;
        }

        public function getsenha()
        {
            return $this->senha;
        }

        public function setsenha($_senha)
        {
            $this->senha = $_senha;
        }
        
        
        public function cadastro()
        {
            include_once("conn.php");
            $sql = "CALL picadastro(:nome, :email, :dtnascimento, :cidade, :senha)";

            $data = [
                'nome' => $this->nome,
                'email' => $this->email,
                'dtnascimento' => $this->dtnascimento,
                'cidade' => $this->cidade,
                'senha' => $this->senha
            ];

            $statement = $conn->prepare($sql);
            $statement->execute($data);

            return true;

        }
       
        public function ListarUsuario()
        {
            include("conn.php");

            $sql = "CALLpsListarUsuario('')";
            $data = $conn->query($sql)->fetchAll();

            return $data;
        }

        catch (Exception $e) 
        {
            return false;
        }


        public function deleteUsuario($_id)
        {

            include("conn.php");
            $sql = "CALL pddelete(:id)";
 
            $data = [

               "id" => $_id
            ];
 
            $statement = $conn->prepare($sql);
            $statement->execute($cadastro);
 
            return true;
        }
        catch (Exception $e) 
        {
            return false;
        }


        public function editar($_id)
        {

            include("conn.php");
            $sql = "CALL inserir(:id)";
 
            $data = [

               "id" => $_id
            ];
 
            $statement = $conn->prepare($sql);
            $statement->execute($editar);
 
            return true;
        }
        catch (Exception $e) 
        {
            return false;
        }


        public function atualizar($_id)
        {

            include("conn.php");
            $sql = "CALL puUpdate(:id)";
 
            $data = [

               "id" => $_id
            ];
 
            $statement = $conn->prepare($sql);
            $statement->execute($editar);
 
            return true;
 
            catch (Exception $e) 
            {
                return false;
            }
        }


        public function Login ($_email,$_senha)
        {
 
            include("conn.php");
            $sql = "CALL psLoginUsuario('$_email', '$_senha')";
            $stmt = $conn->prepare($sql);
 
            $stmt->execute(); 
            
            if ($user = $stmt->fetch()) 
            {
                $this->nome = $user["nome"];
                return 1;
            }
            else
            {
                return 0;
            }
            catch (Exception $e) 
            {
                return false;
            }
        }
    }


    


