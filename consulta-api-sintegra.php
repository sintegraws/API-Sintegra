<?php

  // Informações para a chamada da API
  $token = "XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX";
  $cnpj = "06990590000123";
  $plugin = "ST";

  //URL do serviço
  $service_url = "https://sintegraws.com.br/api/v1/execute-api.php?token=" . $token . "&cnpj=" . $cnpj . "&plugin=" . $plugin;

  //Faz a chamada da API
  $response = file_get_contents($service_url);

  //Aqui fazemos o parse do json retornado
  $json = json_decode($response);

  //Aqui exibimos uma mensagem caso tenha ocorrido algum erro
  if ($json->code != '0') 
  {
    die("Erro " . $json->code . ": " . $json->message);
  }

  //Mostra informações do Sintegra
  echo "Nome empresarial: " . $json->nome_empresarial;
  echo "<br>";
  echo "Nome fantasia: " . $json->nome_fantasia;
  echo "<br>";
  echo "Inscricao estadual: " . $json->inscricao_estadual;
  echo "<br>";
  echo "Tipo inscricao: " . $json->tipo_inscricao;
  echo "<br>";
  echo "Data situacao cadastral: " . $json->data_situacao_cadastral;
  echo "<br>";
  echo "Situacao cnpj: " . $json->situacao_cnpj;
  echo "<br>";
  echo "Situacao ie: " . $json->situacao_ie;
  echo "<br>";
  echo "Data inicio atividade: " . $json->data_inicio_atividade;
  echo "<br>";
  echo "Regime tributacao: " . $json->regime_tributacao;
  echo "<br>";
  echo "Informacao ie como destinatario: " . $json->informacao_ie_como_destinatario;
  echo "<br>";
  echo "Porte empresa: " . $json->porte_empresa;
  echo "<br>";
  echo "Cnae principal.code: " . $json->cnae_principal->code;
  echo "<br>";
  echo "Cnae principal.text: " . $json->cnae_principal->text;
  echo "<br>";
  echo "Data fim atividade: " . $json->data_fim_atividade;
  echo "<br>";
  echo "Uf: " . $json->uf;
  echo "<br>";
  echo "Cep: " . $json->cep;
  echo "<br>";
  echo "Municipio: " . $json->municipio;
  echo "<br>";
  echo "Bairro: " . $json->bairro;
  echo "<br>";
  echo "Logradouro: " . $json->logradouro;
  echo "<br>";
  echo "Complemento: " . $json->complemento;
  echo "<br>";
  echo "Número: " . $json->numero;
  echo "<br>";
  echo "Ibge.codigo municipio: " . $json->ibge->codigo_municipio;
  echo "<br>";
  echo "Ibge.codigo uf: " . $json->ibge->codigo_uf;


?>





