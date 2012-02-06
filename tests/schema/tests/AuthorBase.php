<?php
namespace tests;



class AuthorBase 
	extends \Lazy\BaseModel
{

	const schema_proxy_class = '\\tests\\AuthorSchemaProxy';
	const collection_class = '\\tests\\AuthorCollection';
	const model_class = '\\tests\\Author';

}
