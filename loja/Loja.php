<?php include_once '../conexao.php';

class Loja{

    protected $idloja;
    protected $razao_social;
    protected $cnpj;
    protected $cep;
    protected $endereco;
    protected $bairro;
    protected $cidade;
    protected $uf;
    protected $idaviacao;
    protected $idterrestre;

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
    protected $idmaritimo;

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

    /**
     * @return mixed
     */
    public function getRazaoSocial()
    {
        return $this->razao_social;
    }

    /**
     * @param mixed $razao_social
     */
    public function setRazaoSocial($razao_social)
    {
        $this->razao_social = $razao_social;
    }

    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
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
    public function getIdaviacao()
    {
        return $this->idaviacao;
    }

    /**
     * @param mixed $idaviacao
     */
    public function setIdaviacao($idaviacao)
    {
        $this->idaviacao = $idaviacao;
    }

    /**
     * @return mixed
     */
    public function getIdterrestre()
    {
        return $this->idterrestre;
    }

    /**
     * @param mixed $idterrestre
     */
    public function setIdterrestre($idterrestre)
    {
        $this->idterrestre = $idterrestre;
    }

    /**
     * @return mixed
     */
    public function getIdmaritimo()
    {
        return $this->idmaritimo;
    }

    /**
     * @param mixed $idmaritimo
     */
    public function setIdmaritimo($idmaritimo)
    {
        $this->idmaritimo = $idmaritimo;
    }


    public function recuperarDados(){
        $conexao = new Conexao();
        $sql = "select * from loja";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados){

        $razao_social = $dados['razao_social'];
        $cnpj = $dados['cnpj'];
        $cep = $dados['cep'];
        $endereco = $dados['endereco'];
        $bairro = $dados['bairro'];
        $cidade = $dados['cidade'];
        $uf = $dados['uf'];
        $idaviacao = $dados['idaviacao'];
        $idterrestre = $dados['idterrestre'];
        $idmaritimo = $dados['idmaritimo'];


        $conexao = new Conexao();

        $sql = "insert into loja (razao_social, cnpj, cep, endereco, bairro, cidade, uf, idaviacao, idterrestre, idmaritimo) values ('$razao_social', '$cnpj', '$cep', '$endereco', '$bairro', '$cidade', '$uf', '$idaviacao', '$idterrestre', '$idmaritimo')";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function excluir($idloja){

        $conexao = new Conexao();

        $sql = "delete from loja where idloja = $idloja;";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function carregarPorId($idloja){
        $conexao = new Conexao();

        $sql = "select * from loja where idloja = $idloja";
        $dados = $conexao->recuperarDados($sql);

        $this->idloja = $dados[0]['idloja'];
        $this->razao_social = $dados[0]['razao_social'];
        $this->cnpj = $dados[0]['cnpj'];
        $this->cep = $dados[0]['cep'];
        $this->endereco = $dados[0]['endereco'];
        $this->bairro = $dados[0]['bairro'];
        $this->cidade = $dados[0]['cidade'];
        $this->uf = $dados[0]['uf'];
        $this->idaviacao = $dados[0]['idaviacao'];
        $this->idterrestre = $dados[0]['idterrestre'];
        $this->idmaritimo = $dados[0]['idmaritimo'];

    }
    public function alterar($dados){

        $idloja = $dados['idloja'];
        $razao_social = $dados['razao_social'];
        $cnpj = $dados['cnpj'];
        $cep = $dados['cep'];
        $endereco = $dados['endereco'];
        $bairro = $dados['bairro'];
        $cidade = $dados['cidade'];
        $uf = $dados['uf'];
        $idaviacao = $dados['idaviacao'];
        $idterrestre = $dados['idterrestre'];
        $idmaritimo = $dados['idmaritimo'];

        $conexao = new Conexao();

        $sql = "update loja set razao_social = '$razao_social', cnpj='$cnpj', cep='$cep', endereco='$endereco', bairro='$bairro', cidade='$cidade', uf='$uf', idaviacao='$idaviacao', idterrestre='$idterrestre', idmaritimo='$idmaritimo'
                where idloja = $idloja";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

}