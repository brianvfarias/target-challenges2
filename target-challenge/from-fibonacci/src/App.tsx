import { MouseEvent, useEffect, useState } from 'react'
import styles from './App.module.css'


export function App() {
  const [number, setNumber] = useState("")
  const [answer, setAnswer] = useState("")

  function handleIsFromFibonacci(e: MouseEvent<HTMLElement>) {
    e.preventDefault()
    let actualNumber = Number(number)
    if (actualNumber === 0 || actualNumber === 1) {
      setAnswer(`O número ${actualNumber} pertence à sequência de fibonacci`)
      setNumber("")
      return
    }

    let n1 = 0
    let n2 = 1
    let n3 = 0
    for (let i = 0; n3 < actualNumber; i++) {
      n3 = n1 + n2
      if (actualNumber === n3) {
        setAnswer(`O número ${actualNumber} pertence à sequência de fibonacci`)
      } else {
        setAnswer(`O número ${actualNumber} não pertence à sequência de fibonacci`)
      }

      n1 = n2
      n2 = n3


    }
    setNumber("")
    return
  }

  // useEffect(() => setNumber(0), [answer])


  return (
    <main className={styles.app}>
      <form className={styles.form}>
        <fieldset className={styles.fieldset}>
          <legend>Confira se o número pertence à Sequência de Fibonacci</legend>
          <label htmlFor="check-number">Insira um número positivo</label>
          <input id="check-number" min="0" type="number" value={number} onChange={e => {
            setNumber(e.target.value)
            setAnswer("")
          }} />
          <button className={styles.btn} onClick={handleIsFromFibonacci}>Conferir</button>

        </fieldset>
      </form>
      {
        answer &&

        <div>
          <hr />
          <p>{answer}</p>
        </div>

      }
    </main >
  )
}

