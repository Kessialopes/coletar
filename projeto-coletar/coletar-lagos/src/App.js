import React from 'react'
import { Provider } from 'react-redux'
import { store } from './store/store'
import { createTheme, ThemeProvider } from '@material-ui/core/styles'

import Routes from './routes.js'
import './css/dashboard.css'

const theme = createTheme({
  palette: {
    primary: {
      main: '#000000'
    }
  }
})

function App() {
  return (
    <Provider store={store}>
      <ThemeProvider theme={theme}>
        <Routes />
      </ThemeProvider>
    </Provider>
  )
}

export default App
