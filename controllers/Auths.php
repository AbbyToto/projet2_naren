<?php
class Auths extends Controller
{

  public function register()
  {
    //var_dump($_POST);
    $this->loadModel("Auth");
    $this->loadModel("Role");


    //var_dump($this->Role::CLIENT);

    //$data = $_Post;

    //var_dump($data);
    if (isset($_POST["envoyer"])) {
      $errors = $this->Auth->testData($_POST);

      if (count($errors) > 0) {
        $this->render('register');
      } else {
        if ($this->Auth->verifierMdp($_POST["pwd"], $_POST["pwdCF"])) {
          $email['email'] = $_POST["email"];
          if ($this->Auth->verifierEmail($email)) {
            $errors["invalidEmail"] = "l'utilsateur existe deja";
          } else {
            $this->Role->setNom($this->Role::CLIENT);
            $role_id = ($this->Role->getIdByNom());
            unset($_POST["pwdCF"], $_POST["envoyer"]);
            $_POST["role_id"] = $role_id["id"];
            $_POST["pwd"] = password_hash($_POST["pwd"], PASSWORD_DEFAULT);

            $reponse = $this->Auth->register($_POST);
            var_dump($reponse);

            if ($reponse) {

              $this->render('login');

              return;
            }
          }
        }
      }
    }
    $this->render('register');
  }


  public function test()
  {
    if (true) {
      $this->render("login");
      return;
    }

    $this->render("register");
  }

  public function login()
  {
    if (isset($_POST["envoyer"])) {
      $this->loadModel("Auth");
      // var_dump($_POST);
      //$this->loadModel("Role");
      $errors = $this->Auth->testData($_POST);
      $email['email'] = $_POST["email"];
      $password = $_POST['pwd'];
      //var_dump($errors);
      $utilisateur =  $this->Auth->verifierEmail($email);
      var_dump($utilisateur);

      var_dump($_POST['pwd']);

      if ($utilisateur) {
        if (password_verify($password, $utilisateur['pwd'])) {
          // $this->loadModel("Role");

          // $this->Role->setNom($this->Role::ADMIN);
          // $resultat = $this->Role->getIdByNom();
          $this->Auth->sessionSave($utilisateur);
          $this->render2("products/index");
          // if($this->Auth->isAdmin($utilisateur['id_role'],$resultat['role_id'])){
          //   echo "C'est un admin";
          // }else{
          //   echo "C'est un client";
          // }



        }
      }
    }
    $this->render('login');
  }
}
