import React from "react";
import { Link } from 'react-router-dom';

function Place(props) {
  /*
    function handleClick() {
      props.onCardClick(props.card);
    }

    реализовать нечто подобное, только для перехода на нужную страницу
  */

  return(
    <article className="place">
      <div className="place__info">
        <div className="place__info-box">
          <h4 className="place__title">{props.head}</h4>
          <p className="place__text">{props.text}</p>
          <Link
            to={props.link}
            className="place__link buttons"
          >Подробнее</Link>
        </div>
      </div>
      <img
        className="place__pic"
        src={props.pic}
        alt={props.picText}
      />
    </article>
  );
}

export default Place;
