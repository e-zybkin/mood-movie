import React from "react";

function FoodCard(props) {
  return(
    <article className="foodcard">
      <div className="foodcard__pic-box">
        <img
          className="foodcard__pic"
          src={props.pic}
          alt="props.alt"
        />
      </div>
      <p className="foodcard__text">{props.text}</p>
      <p className="foodcard__price">{props.price}</p>
    </article>
  );
}

export default FoodCard;
