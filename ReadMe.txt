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

ممانعت از دیده شدن فاکتورهای موجود در سبد خرید در سمت 
facor_show
my_orders

radio button address select in review_factor
basket count chek out
add adress validation
remove item from basket review_factor (user id chack shavad)
add address to factor (user id check shavad)
modal to review_factor


echo hash('sha256',$timestamp);