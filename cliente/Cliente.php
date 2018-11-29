<?php include_once '../conexao.php';

class Cliente{

    protected $idcliente;
    protected $nome;
    protected $nascimento;
    protected $telefone;
    protected $cpf;
    protected $cnh;
    protected $cep;
    protected $endereco;
    protected $bairro;
    protected $cidade;
    protected $uf;
    protected $email;
    protected $idloja;


    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * @param mixed $bairro
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * @param mixed $idcliente
     */
    public function setIdcliente($idcliente)
    {
        $this->idcliente = $idcliente;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * @param mixed $nascimento
     */
    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * @return mixed
     */
    public function getCnh()
    {
        return $this->cnh;
    }

    /**
     * @param mixed $cnh
     */
    public function setCnh($cnh)
    {
        $this->cnh = $cnh;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getIdloja()
    {
        return $this->idloja;
    }

    /**
     * @param mixed $idloja
     */
    public function setIdloja($idloja)
    {
        $this->idloja = $idloja;
    }


    public function recuperarDados(){
        $conexao = new Conexao();
        $sql = "select * from cliente order by nome asc";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados){

        $nome = $dados['nome'];
        $nascimento = $dados['nascimento'];
        $telefone = $dados['telefone'];
        $cpf = $dados['cpf'];
        $cnh = $dados['cnh'];
        $cep = $dados['cep'];
        $endereco = $dados['endereco'];
        $bairro = $dados['bairro'];
        $cidade = $dados['cidade'];
        $uf = $dados['uf'];
        $email = $dados['email'];
        $idloja = $dados['idloja'];

        $conexao = new Conexao();

        $sql = "insert into cliente (nome, nascimento, telefone, cpf, cnh, cep, endereco, bairro, cidade, uf, email, idloja)values ('$nome', '$nascimento', '$telefone', '$cpf', '$cnh', '$cep','$endereco', '$bairro', '$cidade', '$uf','$email', '$idloja')";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function excluir($idcliente){

        $conexao = new Conexao();

        $sql = "delete from cliente where idcliente = $idcliente;";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function carregarPorId($idcliente){
        $conexao = new Conexao();

        $sql = "select * from cliente where idcliente = $idcliente";
        $dados = $conexao->recuperarDados($sql);

        $this->idcliente = $dados[0]['idcliente'];
        $this->nome = $dados[0]['nome'];
        $this->nascimento = $dados[0]['nascimento'];
        $this->telefone = $dados[0]['telefone'];
        $this->cpf = $dados[0]['cpf'];
        $this->cnh = $dados[0]['cnh'];
        $this->cep = $dados[0]['cep'];
        $this->endereco = $dados[0]['endereco'];
        $this->bairro = $dados[0]['bairro'];
        $this->cidade = $dados[0]['cidade'];
        $this->uf = $dados[0]['uf'];
        $this->email = $dados[0]['email'];
        $this->idloja = $dados[0]['idloja'];

    }
    public function alterar($dados){

        $idcliente = $dados['idcliente'];
        $nome = $dados['nome'];
        $nascimento = $dados['nascimento'];
        $telefone = $dados['telefone'];
        $cpf = $dados['cpf'];
        $cnh = $dados['cnh'];
        $cep = $dados['cep'];
        $endereco = $dados['endereco'];
        $bairro = $dados['bairro'];
        $cidade = $dados['cidade'];
        $uf = $dados['uf'];
        $email = $dados['email'];
        $idloja = $dados['idloja'];

        $conexao = new Conexao();

        $sql = "update cliente set nome = '$nome', nascimento='$nascimento', telefone='$telefone', cpf='$cpf', cnh='$cnh', cep='$cep', endereco='$endereco', bairro='$bairro', cidade='$cidade', uf='$uf', email='$email', idloja='$idloja' 
                where idcliente = $idcliente";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function existeTelefone($telefone)
    {
        $conexao = new Conexao();

        $sql = "select * from cliente where telefone = '$telefone'";
        $dados = $conexao->recuperarDados($sql);

        return (boolean) $dados;
    }
    public function existeCpf($cpf)
    {
        $conexao = new Conexao();

        $sql = "select * from cliente where cpf = '$cpf'";
        $dados = $conexao->recuperarDados($sql);

        return (boolean) $dados;
    }

    public function existeCnh($cnh)
    {
        $conexao = new Conexao();

        $sql = "select * from cliente where cnh = '$cnh'";
        $dados = $conexao->recuperarDados($sql);

        return (boolean) $dados;
    }
    public function existeEmail($email)
    {
        $conexao = new Conexao();

        $sql = "select * from cliente where email = '$email'";
        $dados = $conexao->recuperarDados($sql);

        return (boolean) $dados;
    }

}