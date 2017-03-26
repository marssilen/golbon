<?php
class Ajax extends Controller
{
public function header(){
	require_once('app/views/header_content.php');
}
public function province(){
            $pro=array(
                "...",
                "آذربایجان شرقی",
                "آذربایجان غربی",
                "اردبیل",
                "اصفهان",
                "البرز",
                "ایلام",
                "بوشهر",
                "تهران",
                "چهارمحال و بختیاری",
                "خراسان جنوبی",
                "خراسان رضوی",
                "خراسان شمالی",
                "خوزستان",
                "زنجان",
                "سمنان",
                "سیستان و بلوچستان",
                "فارس",
                "قزوین",
                "قم",
                "کردستان",
                "کرمان",
                "کرمانشاه",
                "کهگیلویه و بویراحمد",
                "گلستان",
                "گیلان",
                "لرستان",
                "مازندران",
                "مرکزی",
                "هرمزگان",
                "همدان",
                "یزد"
            );

            //$this->model->add_province($pro);
            echo json_encode($pro);
        }
public function city($province=""){
$city=$this->model->get_cities($province);
echo json_encode($city);
}

	public function index($pageno=1,$fun=0,$id=0,$cat=0)
	{
		// $cardModel=$this->model;
		// $count=$cardModel->count();
		// $cardsarray=$cardModel->show($fun,$id,$cat);
		// $cards=array();
		// foreach($cardsarray as $card){
		// 	$cards[]=new card($card['id'],$card['name'],$card['card_image'],$card['price'],$card['old_price'],'edit_item/'.$card['id']);
		// }
		// $this->view('card/index',['row'=>$count,'cards'=>$cards]);

		$this->formModel->sh($pageno);
	}
	public function cat()
	{
		$result=$this->model->get_cat();
		$mothers=array();
		foreach($result as $cats => $cat){
			if($cat['pa_cat']==0){
				$mothers[]= $cat;
			}else{
				//$mothers[$cat['pa_cat']-1][]= $cat;
			}
			//if($cat['pa_cat']==1){
				//$mothers[$cat['pa_cat']-1][]= $cat;
			//}
		}
		echo '<pre>';

		print_r( $mothers);
	}
	public function search(){
		$json='{
  "records": [
    {
      "Name": "Alfreds Futterkiste",
      "City": "Berlin",
      "Country": "Germany"
    },
    {
      "Name": "Ana Trujillo Emparedados y helados",
      "City": "México D.F.",
      "Country": "Mexico"
    },
    {
      "Name": "Antonio Moreno Taquería",
      "City": "México D.F.",
      "Country": "Mexico"
    },
    {
      "Name": "Around the Horn",
      "City": "London",
      "Country": "UK"
    },
    {
      "Name": "Bs Beverages",
      "City": "London",
      "Country": "UK"
    },
    {
      "Name": "Berglunds snabbköp",
      "City": "Luleå",
      "Country": "Sweden"
    },
    {
      "Name": "Blauer See Delikatessen",
      "City": "Mannheim",
      "Country": "Germany"
    },
    {
      "Name": "Blondel père et fils",
      "City": "Strasbourg",
      "Country": "France"
    },
    {
      "Name": "Bólido Comidas preparadas",
      "City": "Madrid",
      "Country": "Spain"
    },
    {
      "Name": "Bon app",
      "City": "Marseille",
      "Country": "France"
    },
    {
      "Name": "Bottom-Dollar Marketse",
      "City": "Tsawassen",
      "Country": "Canada"
    },
    {
      "Name": "Cactus Comidas para llevar",
      "City": "Buenos Aires",
      "Country": "Argentina"
    },
    {
      "Name": "Centro comercial Moctezuma",
      "City": "México D.F.",
      "Country": "Mexico"
    },
    {
      "Name": "Chop-suey Chinese",
      "City": "Bern",
      "Country": "Switzerland"
    },
    {
      "Name": "Comércio Mineiro",
      "City": "São Paulo",
      "Country": "Brazil"
    }
  ]
}';
echo $json;
	}

}
