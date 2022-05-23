import Popup from "../Popup/Popup";
import FoodCard from "../FoodCard/FoodCard";
import popcorn from "../../images/menu-popcorn.png"
import nachos from "../../images/menu-nachos.png"
import fries from "../../images/menu-fries.png"
import HDClassic from "../../images/menu-HDClassic.png"
import HDTexas from "../../images/menu-HDTexas.png"
import HDDenver from "../../images/menu-HDDenver.png"
import CTMilk from "../../images/menu-CTMilk.png"
import CTChoc from "../../images/menu-CTChoc.png"
import CTStr from "../../images/menu-CTStr.png"

//Все картинки и данные сохранить в отдельном конфиге
//создать один компонент popup__bar-block
//и с помощью цикла отправлять туда данные из конфига
//итогом должна стать в разы более простая и функциональная конструкция

function BarPopup(props) {
  return(
    <Popup isOpen={props.isOpen} name="bar" onClose={props.onClose}>
      <div className="popup__bar-box">
        <h4 className="popup__bar-title">КИНОБАР</h4>
        <p className="popup__bar-text">
          В нашем кинобаре вас ждет
          традиционный попкорн, фирменные
          коктейли и закуски. Мы внесли в меню
          полюбившиеся вам хотдоги собственного
          приготовления.
        </p>
        <h5 className="popup__bar-header">Закуски</h5>
        <div className="popup__bar-block">
          <FoodCard
            name="popcorn"
            pic={popcorn}
            alt="попкорн"
            text="Попкорн карамельный/соленый"
            price="350 р"
          />
          <FoodCard
            name="nachos"
            pic={nachos}
            alt="начос"
            text="Начос с сырным соусом"
            price="270 р"
          />
          <FoodCard
            name="fries"
            pic={fries}
            alt="Картофель фри"
            text="Картофель фри"
            price="190 р"
          />
        </div>
        <h5 className="popup__bar-header">Хот-доги</h5>
        <div className="popup__bar-block">
          <FoodCard
            name="Hotdog"
            pic={HDClassic}
            alt="ClassicHD"
            text="Классический хот-дог"
            price="300 р"
          />
          <FoodCard
            name="Hotdog"
            pic={HDTexas}
            alt="TexasHD"
            text="Техасский хот-дог"
            price="370 р"
          />
          <FoodCard
            name="Hotdog"
            pic={HDDenver}
            alt="DenverHD"
            text="Денверский хот-дог"
            price="380 р"
          />
        </div>
        <h5 className="popup__bar-header">Коктейли</h5>
        <div className="popup__bar-block">
          <FoodCard
            name="Cocktail"
            pic={CTMilk}
            alt="MilkCT"
            text="Молочный коктейль"
            price="200 р"
          />
          <FoodCard
            name="Cocktail"
            pic={CTChoc}
            alt="ChocCT"
            text="Шоколадный коктейль"
            price="200 р"
          />
          <FoodCard
            name="Cocktail"
            pic={CTStr}
            alt="StrCT"
            text="Клубничный коктейль"
            price="200 р"
          />
        </div>
      </div>
    </Popup>
  );
}

export default BarPopup;
