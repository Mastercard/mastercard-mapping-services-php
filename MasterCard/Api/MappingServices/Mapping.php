<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\MappingServices;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class Mapping extends BaseObject {



	protected static function getOperationConfig($operationUUID) {
		switch ($operationUUID) {
			case "651278d9-bb81-414d-9f37-ccae18a7d75d":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}/accounts/{accountId}/additional-data", "create", array(), array());
			case "365e1094-c17f-4285-bdee-6860fe9e43d3":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}/accounts", "create", array(), array());
			case "2ed3418a-433f-4cc0-9b7c-28bb2ed6aace":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings", "create", array(), array());
			case "8f4666df-8715-4f09-b004-a8d08bf95b90":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}/accounts/{accountId}/additional-data/{additionalDataId}", "delete", array(), array());
			case "4c5b3925-27a0-4918-bd94-74e059ab8317":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}", "delete", array(), array());
			case "2f71506f-eeb8-4ffd-97de-06f0dabf91ea":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}/accounts/{accountId}", "delete", array(), array());
			case "488dea0a-6570-49ba-9d44-1d8db30d62e8":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}/accounts", "query", array(), array());
			case "b264847b-fc4a-4cee-8a47-727ef9d86394":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}/accounts/{accountId}/additional-data", "query", array(), array());
			case "6a578b33-60f5-4bbe-96c2-68792f8e9fca":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}/accounts/{accountId}/additional-data/{additionalDataId}", "read", array(), array());
			case "fdd2bbb2-e16c-4aea-b06b-ff0c75a031d2":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}/accounts/{accountId}", "read", array(), array());
			case "61616263-ee79-4361-a78a-ea1ec83ea11a":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}", "read", array(), array());
			case "2febaa09-cd48-4170-9595-31c4f1c2e059":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings", "query", array("ref","customer_identifier"), array());
			case "70cccc3e-0708-4460-9035-0ed41fe4c906":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/search", "create", array(), array());
			case "354e8175-a63e-4d30-b6e2-b7cbe8f2f691":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}/accounts/{accountId}/additional-data/{additionalDataId}", "update", array(), array());
			case "b55d7e2d-2dc5-4e43-b2da-0a4db91863a1":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}", "update", array(), array());
			case "0c55420d-acab-4e74-8d6a-7d4dfbb67ada":
				return new OperationConfig("/send/v1/partners/{partnerId}/mappings/{mappingId}/accounts/{accountId}", "update", array(), array());
			
			default:
				throw new \Exception("Invalid operationUUID supplied: $operationUUID");
		}
	}

	protected static function getOperationMetadata() {
		$config = ResourceConfig::getInstance();
		return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
	}


   /**
	* Creates object of type Mapping
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Mapping of the response of created instance.
	*/
	public static function addAdditonalData($map)
	{
		return self::execute("651278d9-bb81-414d-9f37-ccae18a7d75d", new Mapping($map));
	}





   /**
	* Creates object of type Mapping
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Mapping of the response of created instance.
	*/
	public static function addMappingAccount($map)
	{
		return self::execute("365e1094-c17f-4285-bdee-6860fe9e43d3", new Mapping($map));
	}





   /**
	* Creates object of type Mapping
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Mapping of the response of created instance.
	*/
	public static function createMapping($map)
	{
		return self::execute("2ed3418a-433f-4cc0-9b7c-28bb2ed6aace", new Mapping($map));
	}








   /**
	* Delete object of type Mapping by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Mapping of the response.
	*/
	public static function deleteAdditionalDataById($id, $requestMap = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if (!empty($requestMap)) {
			$map->setAll($requestMap);
		}
		return self::execute("8f4666df-8715-4f09-b004-a8d08bf95b90", new Mapping($map));
	}

   /**
	* Delete this object of type Mapping
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Mapping of the response.
	*/
	public function deleteAdditionalData()
	{
		return self::execute("8f4666df-8715-4f09-b004-a8d08bf95b90", $this);
	}





   /**
	* Delete object of type Mapping by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Mapping of the response.
	*/
	public static function deleteMappingById($id, $requestMap = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if (!empty($requestMap)) {
			$map->setAll($requestMap);
		}
		return self::execute("4c5b3925-27a0-4918-bd94-74e059ab8317", new Mapping($map));
	}

   /**
	* Delete this object of type Mapping
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Mapping of the response.
	*/
	public function deleteMapping()
	{
		return self::execute("4c5b3925-27a0-4918-bd94-74e059ab8317", $this);
	}





   /**
	* Delete object of type Mapping by id
	*
	* @param String id
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Mapping of the response.
	*/
	public static function deleteMappingAccountById($id, $requestMap = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if (!empty($requestMap)) {
			$map->setAll($requestMap);
		}
		return self::execute("2f71506f-eeb8-4ffd-97de-06f0dabf91ea", new Mapping($map));
	}

   /**
	* Delete this object of type Mapping
	*
	* @throws ApiException - which encapsulates the http status code and the error return by the server
	*
	* @return Mapping of the response.
	*/
	public function deleteMappingAccount()
	{
		return self::execute("2f71506f-eeb8-4ffd-97de-06f0dabf91ea", $this);
	}







	/**
	 * Query objects of type Mapping by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Mapping of the response
	 */
	public static function listAllAccounts($criteria)
	{
		return self::execute("488dea0a-6570-49ba-9d44-1d8db30d62e8",new Mapping($criteria));
	}





	/**
	 * Query objects of type Mapping by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Mapping of the response
	 */
	public static function listAllAdditionalData($criteria)
	{
		return self::execute("b264847b-fc4a-4cee-8a47-727ef9d86394",new Mapping($criteria));
	}




	/**
	 * Returns objects of type Mapping by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Mapping of the response
	 */
	public static function readByAdditionalDataId($id, $criteria = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if ($criteria != null) {
			$map->setAll($criteria);
		}
		return self::execute("6a578b33-60f5-4bbe-96c2-68792f8e9fca",new Mapping($map));
	}





	/**
	 * Returns objects of type Mapping by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Mapping of the response
	 */
	public static function readByMappingAccountId($id, $criteria = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if ($criteria != null) {
			$map->setAll($criteria);
		}
		return self::execute("fdd2bbb2-e16c-4aea-b06b-ff0c75a031d2",new Mapping($map));
	}





	/**
	 * Returns objects of type Mapping by id and optional criteria
	 * @param type $id
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Mapping of the response
	 */
	public static function readByMappingId($id, $criteria = null)
	{
		$map = new RequestMap();
		if (!empty($id)) {
			$map->set("id", $id);
		}
		if ($criteria != null) {
			$map->setAll($criteria);
		}
		return self::execute("61616263-ee79-4361-a78a-ea1ec83ea11a",new Mapping($map));
	}






	/**
	 * Query objects of type Mapping by id and optional criteria
	 *
	 * @param type $criteria
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Mapping of the response
	 */
	public static function listByReferenceOrCustomerIdentifier($criteria)
	{
		return self::execute("2febaa09-cd48-4170-9595-31c4f1c2e059",new Mapping($criteria));
	}
   /**
	* Creates object of type Mapping
	*
	* @param Map map, containing the required parameters to create a new object
	* @return Mapping of the response of created instance.
	*/
	public static function searchMapping($map)
	{
		return self::execute("70cccc3e-0708-4460-9035-0ed41fe4c906", new Mapping($map));
	}






	/**
	 * Updates an object of type Mapping
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Mapping of the response
	 */
	public function updateAdditonalData()  {
		return self::execute("354e8175-a63e-4d30-b6e2-b7cbe8f2f691",$this);
	}





	/**
	 * Updates an object of type Mapping
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Mapping of the response
	 */
	public function updateMapping()  {
		return self::execute("b55d7e2d-2dc5-4e43-b2da-0a4db91863a1",$this);
	}





	/**
	 * Updates an object of type Mapping
	 *
	 * @throws ApiException - which encapsulates the http status code and the error return by the server
	 *
	 * @return Mapping of the response
	 */
	public function updateMappingAccount()  {
		return self::execute("0c55420d-acab-4e74-8d6a-7d4dfbb67ada",$this);
	}






}

