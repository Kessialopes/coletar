import { createStore } from 'redux'
import rootReducer from './reducers/rootreducers.js'

export const store = createStore(rootReducer)
