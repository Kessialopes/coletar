import React,{memo} from 'react'
import logo from './images/logocoletar.png'
import menu from './images/menuburger.png'
import {NavBarStyled, LogoStyled, MenuContentStyled,menuIcon, MenuStyled} from './styles'

function NavBar() {
  return (
    <NavBarStyled>
      <MenuContentStyled>
        <menuIcon src={menu} width='24px'/>
      </MenuContentStyled>
      <MenuStyled>
        <li>
          <a href="#">Home</a>
        </li>
        <li>
        <a href="#">Quem Somos</a>
        </li>
        <li>
          <a href="/loginuser">Sou cidadão</a>
        </li>
        <li>
          <a href="/logincoleta">Sou Coleta Seletiva</a>
        </li>
      </MenuStyled>

     
    </NavBarStyled>
  )
}

export default memo(NavBar)
