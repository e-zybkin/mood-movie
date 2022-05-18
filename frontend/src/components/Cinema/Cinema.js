import React from "react";
import { Link } from 'react-router-dom';
import about from "../../images/about-test.jpg";
import Poster from "../Poster/Poster";
import Form from "../Form/Form";
import lala from "../../images/lalaposter.jpg";

//добрая часть информации будет приходить через контекст,
//так что часть пропсов нужно будет упразднить

//а вообще, если так подумать, через пропсы только функционал
// и будет прилетать, а вся инфа будет приходить через контекст

function Cinema(props) {
  return(
    <>
      <header className="cinema-header">
        <Link
          className="cinema-header__link buttons"
          to="/"
        >⟵ Другие кинотеатры</Link>
      </header>
      <main>
        <section className="loc-slider">
          <h3 className="loc-slider__title">Крыша небоскреба</h3>
          <div className="loc-slider__slider">
            
          </div>
        </section>

        <section className="about">
          <div className="about__pic-box">
            <img
              className="about__pic"
              src={about}
              alt="что то" //Заменить на контекстные данные...как в целом и всё дальше
            />
          </div>
          <div className="about__info">
              <h3 className="about__title">О КИНОТЕАТРЕ</h3>
              <p className="about__text">
                Все мы любим красивые виды города, необычные места,
                душевные компании и конечно же фильмы.
                Специально для вас мы создали данную локацию,
                кинотеатр на крыше!
                В городе очень много развлечений и мест отдыха,
                но крыши это еще не до конца использованные площадки,
                мы переворачиваем ваше стандартное представление о кинотеатре.
                Пледы, стулья, чай и кофе, люди, фото вид на город,
                кино, звёзды - всё это создаёт романтическую атмосферу,
                чему также будут соответствовать показываемые фильмы.
                На данный момент показы проходят летом на разных крышах высоток.
              </p>
          </div>
        </section>

        <section className="billboard">
          <h3 className="billboard__title">АФИША</h3>
          <div className="billboard__posters">
            {/*{props.poster.map((poster, i) => (
            <Poster
              link={poster.link}
              name={poster.name}
              poster={poster}
              onCardClick={props.onCardClick}
            />
          ))}*/}
            <Poster
              pic={lala}
              alt="фильм"
              title="Ла-ла ленд"
              text="Миа и Себастьян выбирают между
              личным счастьем и амбициями.
              Трагикомичный мюзикл о компромиссе в жизни артиста"
            />
            <Poster
              pic={lala}
              alt="фильм"
              title="Ла-ла ленд"
              text="Миа и Себастьян выбирают между
              личным счастьем и амбициями.
              Трагикомичный мюзикл о компромиссе в жизни артиста"
            />
            <Poster
              pic={lala}
              alt="фильм"
              title="Ла-ла ленд"
              text="Миа и Себастьян выбирают между
              личным счастьем и амбициями.
              Трагикомичный мюзикл о компромиссе в жизни артиста"
            />
          </div>
        </section>

        <section className="reviews">

        </section>

        <section className="review-form">
          <h3 className="review-form__title">Оставьте отзыв о нашем кинотеатре</h3>
          <Form
            name="review"
            submitText="Отправить"
          >
            <div className="review-form__inputs">
              <div className="input-box">
                <input
                  required
                  minLength="2"
                  maxLength="30"
                  type="text"
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
            </div>

          </Form>
        </section>
      </main>
    </>
  )
}

export default Cinema
