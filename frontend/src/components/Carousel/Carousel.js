import React, { cloneElement } from 'react';
import leftArr from "../../images/leftArr.svg";
import rightArr from "../../images/rightArr.svg";

function Carousel(props) {
  const [pages, setPages] = React.useState([]);

  //const PAGE_WIDTH = 823;
  //по идее в эту конструкцию можно внедрять необходимый размер окна в виде пропса

  const [offset, setOffset] = React.useState(0);

  React.useEffect(() => {
    setPages(
      React.Children.map(props.children, child => {
        return cloneElement(child, {
          style: {
            height: '100%',
            maxWidth: `${props.pageWidth}px`, //PAGE_WIDTH
            minWidth: `${props.pageWidth}px`, //PAGE_WIDTH
          }
        })
      })
    )
  }, [])

  function handleLeftArrowClick() {
    setOffset((currentOffset) => {
      const newOffset = currentOffset + props.pageWidth; //PAGE_WIDTH
      return Math.min(newOffset, 0);
    })
  }

  function handleRightArrowClick() {
    setOffset((currentOffset) => {
      const newOffset = currentOffset - props.pageWidth; //PAGE_WIDTH
      const maxOffset = -(props.pageWidth * (pages.length - 1)); //PAGE_WIDTH
      console.log(currentOffset);
      return Math.max(newOffset, maxOffset);

    })
  }

  if(props.arrows) {
    return(
      <div className="carousel carousel__reviews">
        <div className="carousel__window carousel__window_type_review">
          <div
            className="carousel__all-items"
            style={{
              transform: `translateX(${offset}px)`
            }}
          >{pages}</div>
        </div>
        <div className='arrows-box'>
          <img
            className='arrow buttons'
            onClick={handleLeftArrowClick}
            alt=""
            src={leftArr}
          />
          <img
            className='arrow buttons'
            onClick={handleRightArrowClick}
            alt=""
            src={rightArr}
          />
        </div>
      </div>
    )
  } else {
    return(
      <div className="carousel">
        <img
          className='arrow buttons'
          onClick={handleLeftArrowClick}
          alt=""
          src={leftArr}
        />
        <div className="carousel__window">
          <div
            className="carousel__all-items"
            style={{
              transform: `translateX(${offset}px)`
            }}
          >{pages}</div>
        </div>
        <img
          className='arrow buttons'
          onClick={handleRightArrowClick}
          alt=""
          src={rightArr}
        />
      </div>
    )
  }

}

export default Carousel;
