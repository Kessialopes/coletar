import React from 'react'
import { Switch, Route, BrowserRouter } from 'react-router-dom'

import HomePage from './pages/HomePage.js'
import LoginPage from './pages/LoginPage.js'
import MapPage from './pages/Map.js'
import SubscriptionPage from './pages/SubscriptionPage.js'
import CreatePage from './pages/CreatePage.js'
function App() {
  return (
    <div className="App">
      <BrowserRouter>
        <Switch>
          <Route exact path="/">
            <HomePage />
          </Route>
          <Route exact path="/Login">
            <LoginPage />
          </Route>
          <Route exact path="/Map">
            <MapPage />
          </Route>
          <Route exact path="/Subscription">
            <SubscriptionPage />
          </Route>
          <Route exact path="/Create">
            <CreatePage />
          </Route>
        </Switch>
      </BrowserRouter>
    </div>
  )
}

export default App
