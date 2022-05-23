import React from "react";

function ReviewCard(props) {
  return(
    <article className="review">
      <h4 className="review__owner">{props.owner}</h4>
      <p className="review__date">{props.date}</p>
      <p className="review__text">{props.text}</p>
    </article>
  );
}

export default ReviewCard;
