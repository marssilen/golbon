apache conf.d
<Directory "C:/web/xampp/golbon">
    AllowOverride All
</Directory>



$formmodel and mode shoud be in this format "Classname_m"
$this->formModel->

form functions()
display()

check for valid user
	if($this->formModel->check_user('factors',$factor_id,'id')){}

/*
add send multipart file 
factor_show cp add to another factor
menu button

admin access verification before loading model
price cant be zero
prevent showing factors of other users
prevent fake item ids to load in basket




radio button address select in review_factor
basket count chek out
add adress validation
remove item from basket review_factor (user id chack shavad)
add address to factor (user id check shavad)



my_address
address_show
modal to review_factor


echo hash('sha256',$timestamp);



آدرس استان و شهر در فیلد آدرس قرار بگیرد

security in->
	delete_item
	add_item

اگر فاکتور خریداری شده باشد امکان حذف آیتم از فاکتور نباشد