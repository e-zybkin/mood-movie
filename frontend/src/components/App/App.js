import React from "react";
import { Route, Routes, Navigate, useNavigate } from "react-router-dom";
import Main from '../Main/Main';
import Skyscraper from '../Skyscraper/Skyscraper';
import Forest from '../Forest/Forest';
import Desert from '../Desert/Desert';

function App() {

  return (
    <div className="page">
      <div className="wrapper">
        <Routes>
          <Route
            path="/"
            element={
              <Main

              />
            }
          />
          <Route
            path="/romantic"
            element={
              <Skyscraper

              />
            }
          />
          <Route
            path="/horror"
            element={
              <Forest

              />
            }
          />
          <Route
            path="/retro"
            element={
              <Desert

              />
            }
          />
        </Routes>
      </div>
    </div>
  );
}

export default App;
