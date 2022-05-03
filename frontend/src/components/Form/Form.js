import React from "react";

function Form(props) {
 return (
  <form
    className={`form form_type_${props.name}`}
    name={props.name}
    onSubmit={props.onSubmit}
  >
    {props.children}
    <button type="submit" className="form__save-btn buttons">{props.submitText}</button>
  </form>
 );
}

export default Form
