import React from "react";
import { Link } from "react-scroll";
import Footer from "../Footer/Footer";
import Form from "../Form/Form";
import Place from "../Place/Place";
import popcorn from '../../images/popcorn.png';
import tower from '../../images/tower.jpg'
import camp from '../../images/camp.jpg'
import parking from '../../images/parking.jpg'

function Main(props) {
  /*создать функцию обработчик handleSubmit,
    которая будет пробрасывать полученные данные в App.js
    вместе с этим создать стэйт переменные для нужных строк формы

    что то похожее на это

  const [name, setName] = React.useState('');
  const [link, setLink] = React.useState('');

  React.useEffect(() => {
    setName('');
    setLink('');
  }, [props.isOpen])

  function handleNameChange(e) {
    setName(e.target.value);
  }

  function handleLinkChange(e) {
    setLink(e.target.value)
  }

  function handleSubmit(e) {
    e.preventDefault();
    props.onAddCard({
      name,
      link,
    });
  }
  */

  return(
    <>
      <header className="main-header">
        <nav className="main-header__nav">
          <Link
            className="main-header__link"
            to="intro"
            spy={true}
            smooth={true}
            offset={-70}
            duration={500}
          >Главная</Link>
          <Link
            className="main-header__link"
            to="loc"
            spy={true}
            smooth={true}
            offset={-70}
            duration={500}
          >Кинотеатры</Link>
          <Link
            className="main-header__link"
            to="contact"
            spy={true}
            smooth={true}
            offset={-70}
            duration={500}
          >Контакты</Link>
        </nav>
        <h1 className="main-header__title">MoodMovie</h1>
      </header>
      <main>
        <section className="present" id="intro">
          <div className="present__box">
            <h4 className="present__title">Сеть кинотеатров под открытым небом</h4>
            <p className="present__text">
              Хотите смотреть фильмы, удобно расположившись
              на лужайке в парке или в лаунже на крыше?
              MoodMovie предоставит вам такую возможность
              в одной из трех интересных локаций
            </p>
          </div>
        </section>

        <section className="places" id="loc">
          {/*{props.places.map((place, i) => (
            <Place
              link={place.link}
              name={place.name}
              place={place}
              onCardClick={props.onCardClick}
            />
          ))}*/}
          <Place
            head="КРЫША НЕБОСКРЁБА"
            text="В городе очень много развлечений
            и мест отдыха, но крыши это еще не до конца использованные
            площадки, мы переворачиваем ваше стандартное представление о кинотеатре.
            Пледы, стулья, чай и кофе, люди, фото вид на город, кино, звёзды
            - всё это создаёт романтическое настроение."
            link="/romantic"
            pic={tower}
            picText="Крыша небоскрёба"
          />
          <Place
            head="КЕМПИНГ В ЛЕСУ"
            text="На базе всеми любимого кемпинга в лесу
            появился наш новый кинотеатр под открытом небом.
            Фильмы жанра ужасы, треск костра и шелест вековых деревьев,
            дополняя друг друга, подарят Вам незабываемые
            впечатления от просмотра кино. "
            link="/horror"
            pic={camp}
            picText="Кемпинг в лесу"
          />
          <Place
            head="КИНОПАРКИНГ"
            text="В этот вечер — киносеанс и парковка
            сольются для вас воедино.  Фильмы жанра ретро,
            старинный антураж и ваша комфортабельная машина
            позволят перенестись во времена молодости старших поколений."
            link="/retro"
            pic={parking}
            picText="Кинопаркинг"
          />
        </section>

        <section className="bar">
          <div className="bar__box">
            <h3 className="bar__title">КИНОБАР</h3>
            <p className="bar__text">
              В сети наших кинотеатров работает кинобар, в котором вас
              всегда ждет большое разнообразие снеков на любой, даже
              самый требовательный вкус, прохладительные напитки и конечно же уютная обстановка!
              Ознакомиться с ассортиментом вы можете уже сейчас, а перед началом сеанса
              не забудьте зайти и взять с собой незаменимый атрибут - свежий хрустящий попкорн.
            </p>
            <button type="button" onClick={props} className="bar__button">Выбрать снеки</button>
          </div>
          <img
            className="bar__pic"
            src={popcorn}
            alt="Попкорн"
          />
        </section>

        <section className="feedback">
          <div className="feedback__box">
            <h3 className="feedback__title">ОБРАТНАЯ СВЯЗЬ</h3>
            <p className="feedback__text">
              Остались вопросы? Заполните форму и мы свяжемся с вами в ближайшее время
            </p>
            <Form
              name="feedback"
              title="Получить обратную связь"
              submitText="Отправить"
              //onSubmit={handleSubmit}
            >
              <div className="feedback__form-part">
                <div className="input-box">
                  <input
                    required
                    minLength="2"
                    maxLength="30"
                    type="text"
                    //value={name || ''}
                    //onChange={handleNameChange}
                    placeholder="Имя"
                    id="name-input"
                    className="form__input form__input_type_name"
                    name="name"
                  />
                  <span className="form__input-error place-input-error"></span>
                </div>

                <div className="input-box">
                  <input
                    required
                    type="email"
                    //value={email || ''}
                    //onChange={handleEmailChange}
                    placeholder="Email"
                    id="email-input"
                    className="form__input form__input_type_email"
                    name="email"
                  />
                  <span className="form__input-error place-input-error"></span>
                </div>
              </div>


              <div className="input-box">
                <input
                  required
                  type="comment"
                  //value={comment || ''}
                  //onChange={handleCommentChange}
                  placeholder="Комментарий"
                  id="comment-input"
                  className="form__input form__input_type_comment"
                  name="comment"
                />
                <span className="form__input-error place-input-error"></span>
              </div>
            </Form>
          </div>

        </section>

      </main>
      <Footer />
    </>
  );
}

export default Main;
