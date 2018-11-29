<?php include_once '../conexao.php';

class Maritimo{

    protected $idmaritimo;
    protected $nome;
    protected $marca;
    protected $cor;
    protected $motor;
    protected $placa;
    protected $renavam;
    protected $chassi;
    protected $valor;
    protected $ano;
    protected $foto;

    /**
     * @return mixed
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * @param mixed $foto
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;
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
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * @param mixed $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }

    /**
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * @param mixed $cor
     */
    public function setCor($cor)
    {
        $this->cor = $cor;
    }

    /**
     * @return mixed
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * @param mixed $motor
     */
    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    /**
     * @return mixed
     */
    public function getPlaca()
    {
        return $this->placa;
    }

    /**
     * @param mixed $placa
     */
    public function setPlaca($placa)
    {
        $this->placa = $placa;
    }

    /**
     * @return mixed
     */
    public function getRenavam()
    {
        return $this->renavam;
    }

    /**
     * @param mixed $renavam
     */
    public function setRenavam($renavam)
    {
        $this->renavam = $renavam;
    }

    /**
     * @return mixed
     */
    public function getChassi()
    {
        return $this->chassi;
    }

    /**
     * @param mixed $chassi
     */
    public function setChassi($chassi)
    {
        $this->chassi = $chassi;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param mixed $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * @param mixed $ano
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
    }



    public function recuperarDados(){
        $conexao = new Conexao();
        $sql = "select * from maritimo";
        return $conexao->recuperarDados($sql);
    }

    public function inserir($dados, $img){

        $nome = $dados['nome'];
        $marca = $dados['marca'];
        $cor = $dados['cor'];
        $motor = $dados['motor'];
        $placa = $dados['placa'];
        $renavam = $dados['renavam'];
        $chassi = $dados['chassi'];
        $valor = $dados['valor'];
        $ano = $dados['ano'];
        $foto = $img['foto']['name'];
        $this->uploadFoto($img);

        $conexao = new Conexao();

        $sql = "insert into maritimo (nome, marca, cor, motor, placa, renavam, chassi, valor, ano, foto) values ('$nome', '$marca', '$cor', '$motor', '$placa', '$renavam', '$chassi', '$valor', '$ano', '$foto')";
        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function excluir($idmaritimo){

        $conexao = new Conexao();

        $sql = "delete from maritimo where idmaritimo = '$idmaritimo'";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function uploadFoto($img)
    {

        if ($img['foto']['error'] == UPLOAD_ERR_OK) {
            $origem = $img['foto']['tmp_name'];
            $destino = '../upload/maritimo/' . $img['foto']['name'];

            move_uploaded_file($origem, $destino);
        }
    }

    public function carregarPorId($idmaritimo){
        $conexao = new Conexao();

        $sql = "select * from maritimo where idmaritimo = '$idmaritimo'";
        $dados = $conexao->recuperarDados($sql);

        $this->idmaritimo = $dados[0]['idmaritimo'];
        $this->nome = $dados[0]['nome'];
        $this->marca = $dados[0]['marca'];
        $this->cor = $dados[0]['cor'];
        $this->motor = $dados[0]['motor'];
        $this->placa = $dados[0]['placa'];
        $this->renavam = $dados[0]['renavam'];
        $this->chassi = $dados[0]['chassi'];
        $this->valor = $dados[0]['valor'];
        $this->ano = $dados[0]['ano'];
        $this->foto = $dados[0]['foto'];
    }
    public function alterar($dados){

        $idmaritimo = $dados['idmaritimo'];
        $nome = $dados['nome'];
        $marca = $dados['marca'];
        $cor = $dados['cor'];
        $motor = $dados['motor'];
        $placa = $dados['placa'];
        $renavam = $dados['renavam'];
        $chassi = $dados['chassi'];
        $valor = $dados['valor'];
        $ano = $dados['ano'];
        $foto = $dados['foto'];

        $conexao = new Conexao();

        $sql = "update maritimo set nome = '$nome', marca='$marca', cor='$cor', motor='$motor', placa='$placa', renavam='$renavam', chassi='$chassi', valor='$valor', ano='$ano', foto='$foto'
                where idmaritimo = '$idmaritimo'";

        /*echo $sql; die; MOSTRAR O SQL*/
        return $conexao->executar($sql);
    }

    public function existePlaca($placa)
    {
        $conexao = new Conexao();

        $sql = "select * from aviacao where placa = '$placa'";
        $dados = $conexao->recuperarDados($sql);

        return (boolean) $dados;
    }

    public function existeRenavam($renavam)
    {
        $conexao = new Conexao();

        $sql = "select * from aviacao where renavam = '$renavam'";
        $dados = $conexao->recuperarDados($sql);

        return (boolean) $dados;
    }
    public function existeChassi($chassi)
    {
        $conexao = new Conexao();

        $sql = "select * from aviacao where chassi = '$chassi'";
        $dados = $conexao->recuperarDados($sql);

        return (boolean) $dados;
    }
}