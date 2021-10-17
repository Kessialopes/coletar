import { createGlobalStyle } from 'styled-components'
import ColetarBackground from '../config/components/menubar/images/coletarbg.png'

const globalStyle = createGlobalStyle`
  *
  {
    padding: 0,
    margin: 0
  }

  body {
    padding: 0;
    margin: 0;
    background:URL(${ColetarBackground});
    height:100%;
    width:100%
  }`

export default globalStyle
