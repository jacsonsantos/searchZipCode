# searchZipCode
Search places using zip code #Brazil

#### How to Install
```txt
   composer require jsantos/searchzipcode dev-master
```
#### Namespace
```php
   <?php
    use Jsantos\SearchZipCode;
```
#### Method

	* setZipCode(string $zipcode)
	* runZipCode()
	* getAll()
	* getZipCode()
	* getStreet()
	* getComplement()
	* getNeighborhood()
	* getCity()
	* getUf()
	* getUnit()
	* getIbge()
	* getGia()

#### How to use
```php
   <?php
   	use Jsantos\SearchZipCode\SearchByZipCode;

	$zipCode = new SearchByZipCode();

	$cep = "65.080-341"; //insert Zip code: "65.080-341"

	$response = $zipCode->setZipCode($cep)->runZipCode();
	
	$result = $response->getAll();

	print_r($result);
```
