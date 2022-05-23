import { useEffect } from "react";

const Popup = ({ isOpen, name, onClose, children }) => {
  useEffect(() => {
    if (!isOpen) return;
    const closeByEscape = (e) => {
      if (e.key === 'Escape') {
        onClose();
      }
    }

    document.addEventListener('keydown', closeByEscape)
    document.body.classList.add('no-scroll');
    return () => {
      document.removeEventListener('keydown', closeByEscape)
      document.body.classList.remove('no-scroll');
    }
  }, [isOpen, onClose])

  const handleOverlay = (e) => {
    if (e.target === e.currentTarget) {
      onClose();
    }
  }

  //предположительно в type others может не быть надобности, по исходу проекта нужно будет это проверить
  return (
    <div
      className={`popup popup_type_others ${isOpen ? "popup_opened" : ""} popup_type_${name}`}
      onClick={handleOverlay}
    >
      <div className={`popup__content popup__${name}-content`}>
        <button
          className='popup__close-btn buttons'
          type='button'
          onClick={onClose}
        />
        {children}
      </div>
    </div>
  );
};

export default Popup;
