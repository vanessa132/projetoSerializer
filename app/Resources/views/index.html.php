<html>
	<head>
		<title>Exemplo usando Serializer</title>
	</head>
	<body>
		<h2>Conversão do objeto para o formato Json:</h2>
		<?php 
			use Symfony\Component\Serializer\Serializer;
      		use Symfony\Component\Serializer\Encoder\XmlEncoder;
      		use Symfony\Component\Serializer\Encoder\JsonEncoder;
      		use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

      		$encoders = array(new XmlEncoder(), new JsonEncoder());
      		$normalizers = array(new ObjectNormalizer());

      		$serializer = new Serializer($normalizers, $encoders);

      		$pessoa = new AppBundle\ClasseSerializer\Pessoa();
      		$pessoa->setNome('Vanessa');
      		$pessoa->setEmail('vanessa@hotmail.com');
      		$pessoa->setSexo('Feminino');

      		$jsonContent = $serializer->serialize($pessoa, 'json');
      		$xmlContent = $serializer->serialize($pessoa, 'xml');
		?>
		<p><?php echo $jsonContent; ?></p>
		
		<h2>Conversão do objeto para o formato XML:</h2>
		<p><?php echo $xmlContent; ?></p>

	</body>
</html>