import React from 'react'
import { useHistory } from 'react-router-dom'

import styled from 'styled-components'

function HomePage() {
  const history = useHistory()

  const goToLoginPage = () => {
    history.push('/Login')
  }

  const goToSubscriptionPage = () => {
    history.push('/Subscription')
  }
  return (
    <div>
      <Header>
        <ImageLogo src={Logo}></ImageLogo>
        <Navegation onClick={goToLoginPage}>Login</Navegation>
      </Header>
      <hr />
      <Wellcome>
        <h1>Bem vindo(a), à Coletar Lagos!</h1>
      </Wellcome>
      <Containerbtn>
        <Navegationbtn onClick={goToSubscriptionPage}>
          Inscreva-se
        </Navegationbtn>
      </Containerbtn>
    </div>
  )
}
export default HomePage
