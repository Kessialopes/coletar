import React, { Suspense, lazy } from 'react'
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom'

const login = lazy(() => import('./pages/UserLogin.js'))

const Routes = () => (
  <Router>
    <Suspense fallback={<div></div>}>
      <Switch>
        <Route path="/login" component={login} />
        <Route path="/" component={login} />
      </Switch>
    </Suspense>
  </Router>
)
export default Routes
