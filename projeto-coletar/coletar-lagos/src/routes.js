import React, { Suspense, lazy } from 'react'
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'
import ProgressBar from './config/components/circularprogress/ProgressBar'

const loginuser = lazy(() => import('./pages/UserLogin.js'))
const logincoleta = lazy(() => import('./pages/ColetaLogin.js'))
const registeruser = lazy(() => import('./pages/UserRegister.js'))
const registercoleta = lazy(() => import('./pages/ColetaRegister.js'))
const home = lazy(() => import('./pages/Home.js'))

const Routes = () => (
  <Router>
    <Suspense
      fallback={
        <div className="mt-5 pt-5">
          <ProgressBar />
        </div>
      }
    >
      <Switch>
        <Route path="/loginuser" component={loginuser} />
        <Route path="/logincoleta" component={logincoleta} />
        <Route path="/registeruser" component={registeruser} />
        <Route path="/registercoleta" component={registercoleta} />
        <Route exact path="/" component={home} />
      </Switch>
    </Suspense>
  </Router>
)
export default Routes
