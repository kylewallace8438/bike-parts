import React, {useRef, useState} from 'react'
import JobListing from '../components/JobListing'

const JobsPage = () => {
    const [keyword, setKeyword] = useState('')

    return (
        <>
            <section className="bg-blue-50 py-4">
                <div className="container mx-auto px-4">
                    <div className="relative">
                        <input
                            type="text"
                            value={keyword}
                            onChange={e => setKeyword(e.target.value)}
                            className="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500"
                            placeholder="Filter jobs..."
                        />
                    </div>
                </div>
            </section>

            <JobListing>
            </JobListing>

        </>
    )
}

export default JobsPage
