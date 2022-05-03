import React from "react";
import Footer from "../Footer/Footer";
import Form from "../Form/Form";
import popcorn from '../../images/popcorn.png';

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
          <a className="main-header__link" href="/#">Главная</a>
          <a className="main-header__link" href="/#">Кинотеатры</a>
          <a className="main-header__link" href="/#">Контакты</a>
        </nav>
        <h1 className="main-header__title">MoodMovie</h1>
      </header>
      <main>
        <section className="present">
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

        <section className="places">

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
